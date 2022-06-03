<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    private $html = '';
    private $background = '';
    private function json_html ($json_tree, $depth = 1) {
        if (is_array($json_tree)) {
            foreach ($json_tree as $key => $value) {
                $this->html .= "<div class='json_list__item depth-$depth'>";
                if (is_array($value)) {
                    $this->html .= "<div class='dropdown'>$key</div>";
                    $this->json_html($value, $depth+1);
                    //$this->html .= "</div>";
                }
                else {
                    $this->html .= "<div class='json_list__row'><div class='json_list__key'>$key</div>:<div class='json_list__value'>$value</div></div>";
                }
                $this->html .= "</div>";
            }
        }
    }

    //
    public function showList(Request $request)
    {
        json_decode($request);
        $this->json_html($request['list']);

        $matches = array();
        $regexp = '/^\(([0-9]{1,3})\,([0-9]{1,3})\,([0-9]{1,3})\)$/';
        if (preg_match($regexp, $request['background'], $matches)) {
            $this->background = "background: rgb({$matches[1]}, {$matches[2]}, {$matches[3]});";
        } else $this->background = "background: url('{$request['background']}')";

        return view('list', ['background' => $this->background, 'depth' => $request['depth'], 'list' => $this->html ]);
    }
}

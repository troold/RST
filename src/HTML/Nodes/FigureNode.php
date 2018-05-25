<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Nodes\FigureNode as Base;

class FigureNode extends Base
{
    public function render()
    {
        $html = '<figure>';
        $html .= $this->image->render();
        if ($this->document) {
            $caption = trim($this->document->render());
            if ($caption) {
                $html .= '<figcaption>'.$caption.'</figcaption>';
            }
        }
        $html .= '</figure>';

        return $html;
    }
}

<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CoreBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\SlotsHelper as BaseSlotsHelper;

/**
 * Class SlotsHelper
 */
class SlotsHelper extends BaseSlotsHelper
{
    /**
     * Appends a slot value if already set
     *
     * @param $name
     * @param $content
     */
    public function append($name, $content)
    {
        if (isset($this->slots[$name])) {
            if (is_array($this->slots[$name])) {
                $this->slots[$name][] = $content;
            } else {
                $this->slots[$name] .= " " . $content;
            }
        } else {
            $this->slots[$name] = $content;
        }
    }
}

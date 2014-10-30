<?php namespace MySite\Layouts;

class DefaultLayout extends \CoandaCMS\Coanda\Layout\Layout {

    /**
     * @return string
     */
    public function identifier()
    {
        return 'default';
    }

    /**
     * @return string
     */
    public function template()
    {
        return 'layouts.default';
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'Default';
    }
}

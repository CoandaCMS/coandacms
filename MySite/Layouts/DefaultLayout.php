<?php namespace MySite\Layouts;

class DefaultLayout extends \CoandaCMS\Coanda\Layout\Layout {

    public function identifier()
    {
        return 'default';
    }

    public function template()
    {
        return 'layouts.default';
    }

    public function name()
    {
        return 'Default';
    }
}

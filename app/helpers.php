<?php

    function active($path)
    {
        return request()->is($path) ? 'active':'';
    }

    function block($path)
    {
        return request()->is($path) ? 'block':'none';
    }

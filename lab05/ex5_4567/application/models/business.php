<?php

class Business extends VanillaModel {
        var $hasManyBelongsToMany = array('Category' => 'Category');
}
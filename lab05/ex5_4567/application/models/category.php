<?php

class Category extends VanillaModel {
		var $hasManyBelongsToMany = array('Business', 'Business');
}
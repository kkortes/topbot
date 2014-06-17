<?
	class Nostyle {
	  static function getAll() {
	  	return array(
	  		'slider' => array(
	  			'responsive' => array(
	  				'',
	  				array(
							array(),
							array(),
							array(1,2,3,4,5),
							array(),
							array(),
							array(),
							array(),
						)
	  			),
	  		),
	  		'lists' => array(
	  			'default' => array(
	  				'',
	  				array(
							array(),
							array(),
							array(1,2,3,4,5),
							array(),
							array(),
							array(),
							array(),
						)
	  			),
  				'unstyled' => array(
  					'class="list-unstyled"',
  					array(
							array(),
							array(),
							array(1,2,3,4,5),
							array(),
							array(),
							array(),
							array(),
						)
  				),
  				'inline' => array(
  					'class="list-inline"',
  					array(
							array(),
							array(),
							array(1,2,3,4,5),
							array(),
							array(),
							array(),
							array(),
						)
  				),
	  		),
	  		'dropdowns' => array(
	  			'down' => array(
	  				'class="relative"',
	  				'Drop down',
	  				'class="reverser down"',
	  				'class="dropdown"',
	  				'Values',
	  				''
	  			),
	  			'left' => array(
	  				'class="relative"',
	  				'Drop left',
	  				'class="reverser left"',
	  				'class="dropdown"',
	  				'Values',
	  				''
	  			),
	  			'right' => array(
	  				'class="relative"',
	  				'Drop right',
	  				'class="reverser right"',
	  				'class="dropdown"',
	  				'Values',
	  				''
	  			),
	  			'up' => array(
	  				'class="relative"',
	  				'Drop up',
	  				'class="reverser up"',
	  				'class="dropdown"',
	  				'Values',
	  				''
	  			),
	  		),
	  		'floats' => array(
	  			'left' => array(
	  				'class="clearfix"',
	  				'',
	  				'class="image pull-left" style="width:200px"',
	  				'',
	  				'',
	  				'',
	  				'',
	  				'class="text"',
	  				'Lorem Ipsum',
	  				''
	  			),
	  			'right' => array(
	  				'class="clearfix"',
	  				'',
	  				'class="image pull-right" style="width:200px"',
	  				'',
	  				'',
	  				'',
	  				'',
	  				'class="text"',
	  				'Lorem Ipsum',
	  				''
	  			)
	  		),
	  		'columns' => array(
	  			'one' => array(
	  				'class="crow fly"',
	  				array(
	  					'class="up"',
	  					array(),
	  					array(1),
	  					array('asd')
	  				)
	  			),
	  			'two' => array(
	  				'class="crow fly"',
	  				array(
	  					'class="up"',
	  					array(),
	  					array(1,2),
	  					array()
	  				)
	  			),
	  			'three' => array(
	  				'class="crow fly"',
	  				array(
	  					'class="up"',
	  					array(),
	  					array(1,2,3),
	  					array()
	  				)
	  			),
	  			'and-so-on' => array(
	  				'class="crow fly"',
	  				array(
	  					'class="up"',
	  					array(),
	  					array(1,2,3,4,5,6),
	  					array()
	  				)
	  			),
	  		)
	  	);
	  }
	}
?>
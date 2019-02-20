<?php

return [
  'name'        => 'Editor',
    'default'     => false,
    'permissions' => [
      '*'               => true,
      'panel.file.sort' => function() {
        return $this->site()->language() == 'pt';
      }
    ]
];

?>
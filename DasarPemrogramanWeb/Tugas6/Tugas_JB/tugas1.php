<?php 
    
    $menu = [
        [
            "nama" => "Nama:dina"
        ],
        [
            "nama" => "Nim: 123456"
        ],
        [
            "nama" => "Jurusan: Teknik Kimia"
        ],
        [
            "nama" => "Email: dina@gmail.com",
        ]
        ];
    
    $menu1 = [
      [
        "nama" => "Nama:dino"
      ],
      [
        "nama" => "Nim: 91123124"
      ],
      [
        "nama" => "Jurusan: Teknik Listrik"
      ],
      [
        "nama" => "Email: dino@gmail.com",
      ]  
    ];

        function tampilkanMenuBertingkat(array $menu) {
            echo "<ul>";
            foreach ($menu as $key => $item){
                echo "<li>{$item["nama"]}</li>";
                if (isset($item["subMenu"])) {
                    tampilkanMenuBertingkat($item["subMenu"]);
                }
            }
            echo "</ul>";
        }

        tampilkanMenuBertingkat($menu);

        function tampilkanMenuBertingkat1(array $menu1) {
            echo "<ul>";
            foreach ($menu1 as $kunci => $item){
                echo "<li>{$item["nama"]}</li>";
                if (isset($item["subMenu"])) {
                    tampilkanMenuBertingkat($item["subMenu"]);
                }
            }
            echo "</ul>";
        }

        tampilkanMenuBertingkat1($menu1);

?>
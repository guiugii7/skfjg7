<?php
// Определить ассоциативный массив с информацией о различных городах (название города и население)
$ciudades = [
    "Нур-Султан" => 1_188_927,
    "Алматы" => 2_060_700,
    "Шымкент" => 1_093_630,
    "Караганда" => 510_300,
    "Актобе" => 513_623
];

// Найти город с самым большим населением
$ciudad_mas_poblada = null;
$poblacion_mas_grande = 0;
foreach ($ciudades as $ciudad => $poblacion) {
    if ($poblacion > $poblacion_mas_grande) {
        $ciudad_mas_poblada = $ciudad;
        $poblacion_mas_grande = $poblacion;
    }
}

// Вывести результат
echo "Город с самым большим населением: $ciudad_mas_poblada";

?>
<?php

function search_equip($array, $property, $value)
{
    foreach ($array as $object) {
        if (isset($object->$property) && $object->$property == $value) {
            return true;
        }
    }
    return false;
}

function search_weapon($array)
{
    foreach ($array as $object) {
        if (isset($object->type) && ($object->type == 'sword' or $object->type == 'mace' or $object->type == 'dagger')) {
            return true;
        }
    }
    return false;
}

function search_sword($array)
{
    $bonusDmg = 0;
    foreach ($array as $object) {
        if (isset($object->type) && $object->type == 'Sword') {
            $bonusDmg += 2;
        }
    }
    return $bonusDmg;
}

<?php

function validateFood($food)
{
    return strlen(trim($food)) >= 3;
}

function validateMeal($meal)
{
    return in_array($meal, getMeals());
}
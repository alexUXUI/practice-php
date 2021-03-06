<?php

  class Recipe {

    private $title;
    private $source = 'Alex';
    private $yield;
    private $instrucitons, $ingredients, $tag = array();

    private $measurements = array("tsp", "tbsp", "cup", "oz", "lb", "fl oz", "quart", "galon");

    public function addIngredient($item, $amount = null, $measure = null)
    {
      if($amount != null && !is_float($amount) && !is_int($amount)) {
        exit("the amount must be a float:" . gettype($amount) . "$amount given");
      }

      if($measure != null && !in_array(strtolower($measure), $this->measurements)) {
        exit("Please enter a valid measurement" . implode(", ",  $this->measurements));
      }

      $this->ingredients[] = array(
          "item" => ucwords($item),
          "amount" => $amount,
          "measure" => strtolower($measure),
      );
    }

    public function setTitle($title)
    {
        return $this->title = ucwords($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getIngredient()
    {
        return $this->ingredients;
    }

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

    public function addInstruction($string)
    {
        return $this->instrucitons[] = $string;
    }

    public function getInstructions()
    {
        return $this->instrucitons;
    }

  }

?>

<?php

  include 'classes/recipe.php';

  $recipe1 = new Recipe();
  $recipe1->setTitle('my fisrt recipe');
  $recipe1->getTitle();
  $recipe1->displayRecipe();
  $recipe1->addIngredient("sugar", 10);
  $recipe1->addIngredient("butter", 100);
  $recipe1->addIngredient("bacon", 100);

  $ingredientsToAdd = array(
    array("sugar", 10),
    array("butter", 100),
    array("bacon", 100)
  );

  for($i = 0; $i < count($ingredientsToAdd); $i++) {
    $item = $ingredientsToAdd[$i];
    var_dump($item);
    $recipe1->addIngredient($item);
    for($j = 0; $j < count($item); $j++) {
      echo "\n" . $item[$j];
    }
  }

  for($i = 1; $i < 5; $i++) {
    $recipe1->addInstruction("This is instruction $i.");
  }

  echo implode("\n", $recipe1->getInstructions());

  foreach($recipe1->getIngredient() as $ingredient) {
    echo "\n " . $ingredient["amount"]
         . " " . $ingredient["measure"]
         . " " . $ingredient["item"];
  }

?>

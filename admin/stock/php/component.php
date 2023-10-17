<?php
// This has functions to get the various variables
function inputElement($icon, $placeholder, $name, $value){
    // This is used to be able to perform an action for the page and the system for the user
    $ele = "

        <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text bg-warning\">$icon</div>
                        </div>
                        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
                    </div>

    ";
    echo $ele;
}

// This has a function for the button with various different variables added to it
function buttonElement($btnid, $styleclass, $text, $name, $attr){
    // This is the variable for the button
    $btn = "
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
    ";
    echo $btn;
}

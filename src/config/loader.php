<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/{$modelName}.php");
}

function loadView($viewName, $params = array()) {

    if(count($params > 0)) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH ."/{$viewName}");
    
}

function loadTemplateView($viewName, $params = array()) {

    if(count($params > 0)) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH ."/header.php");
    require_once(VIEW_PATH ."/left.php");
    require_once(VIEW_PATH ."/{$viewName}");
    require_once(VIEW_PATH ."/footer.php");
}
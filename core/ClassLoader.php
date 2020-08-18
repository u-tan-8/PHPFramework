<?php

//オートロードに関する処理をまとめたクラス
class ClassLoader {
    protected $dirs;

    //オートローダークラスを登録する処理
    public function register() {
        sql_autoload_register(array($this, 'loadClass'));
    }

    public function registerDir($dir) {
        this->dirs[] = $dir;
    }
 
}
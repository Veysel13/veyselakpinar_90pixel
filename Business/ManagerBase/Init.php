<?php

namespace Business\ManagerBase;

use Core\Exceptions\ResponseException;
class Init extends ManagerSqlQuery
    {

        protected $lang;

        public function __construct()
        {
            $this->lang       = locale(get_post('lang'));
            try {

            }catch (ResponseException $e ) {
                return response($e->getResponse());
            }
        }

    }


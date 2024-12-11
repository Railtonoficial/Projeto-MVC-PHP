<?php
namespace src;

class Config {
    const BASE_DIR = '/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'db'; // Nome do serviço MySQL no docker-compose.yml
    const DB_DATABASE = 'test';
    const DB_USER = 'root';
        const DB_PASS = 'rootpassword';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}

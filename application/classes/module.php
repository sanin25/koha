<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Класс для получения виджетов
 */

class Module {

    protected $_controllers_folder  = 'module';    // Название папки с контроллерами виджетов
    protected $_config_filename     = 'module';    // Название файла конфигураций виджетов
    protected $_route_name          = 'module';    // Название файла конфигураций виджетов по умолчанию
    protected $_params              = array();      // Массив передаваемых параметров
    protected $_module_name;                        // Название виждета (контроллер)


     /*
      * Вызов виджета module::factory('module_name')->render();
      * @param   string  Название виджета
      * @param   array   Массив передаваемых параметров
      * @param   string  Название роута данного виджета
     */
    public static function factory($module_name, array $params = NULL, $route_name = NULL)
    {
        return new module($module_name, $params, $route_name);
    }



    /*
     * Вызов виджета module::load('module_name', array('param' => 'val'), 'route_name');
     * @param   string  Название виджета
     * @param   array   Массив передаваемых параметров
     * @param   string  Название роута данного виджета
     */
    public static function load($module_name, array $params = NULL, $route_name = NULL)
    {
        $module = new module($module_name, $params, $route_name);
        return $module->render();
    }


    public function __construct($module_name, array $params = NULL, $route_name = NULL)
    {
        if ($params != NULL)
        {
            $this->_params = $params;
        }

        if ($route_name != NULL)
        {
            $this->_route_name = $route_name;
        }

        $this->_module_name = $module_name;
    }

    public function render()
    {
        // Получаем текущий контроллер и экшен
        $controller = Request::current()->controller();
        $action = Request::current()->action();
        $directory = Request::current()->directory();

        // Загружаем файл конфигураций
         $module_config = Kohana::$config->load("$this->_config_filename.$this->_module_name.$controller");

         // Запрещаем вывод виджета в экшенах, указанных в конфигах
         if ($module_config != NULL)
         {
             if (in_array($action, $module_config))
             {
                return NULL;
             }

             if (in_array('all_actions', $module_config))
             {
                return NULL;
             }
         }

       $this->_params['controller'] = $this->_module_name;
       $url = Route::get($this->_route_name)->uri($this->_params);
         
       return Request::factory($url)->execute();
    }

}

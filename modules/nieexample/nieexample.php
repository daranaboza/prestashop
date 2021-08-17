<?php

/*
 * Instrucción importante, sirve para temas de seguridad
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class NieExample extends Module
{

    /*
     * http://prestashop.test/admin725wey7m8/index.php/improve/modules/manage?_token=AeFNZ5iRIhldsRektTGIOhUHracbrLS0asGrN5cAIZ4
     * Constructor, se especifican las configuraciones y demás de nuestro proyecto, es lo que aparece al querer instalarlo
     */
    public function __construct()
    {
        $this->name = 'nieexample';
        $this->displayName = 'El ejemplito';
        $this->author = 'Nie';
        $this->bootstrap=true;
        $this->tab = 'front_office_features';
        $this->version = '0.0.1';
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => _PS_VERSION_
        ];
        $this->description='Mi primer modulo en prestashop';


        parent::__construct();
    }

    /*
     * Funcion que se encarga de manejar la instalación en la tienda
     *
     * Configuration => clase predefinida que se encarga de gestionar los datos de la BBDD y nuestro modulo. la tabla usada es => ps_configuration ("ps_" puede cambiar por cualquier prefijo)
     * updateValue=>función para actualizar un dato en nuestra BBDD, primerArgumento=>valor en la columna name de tabla, segundoArgumento=>valor en la columna value de la tabla
     * registerHook=> Indica en que hook podemos registrar/mostrar nuestro módulo, más info=> https://devdocs.prestashop.com/1.7/modules/concepts/hooks/list-of-hooks/
     */
    public function install()
    {

        if(!parent::install() || !Configuration::updateValue('NIEEJEMPLO','http://niejemplo.com') || !$this->registerHook('displayProductAdditionalInfo')){
            return false;
        }
        return true;
    }

    /*
     * Función que se encarga de manejar la desintalación del módulo
     * Configuration::deleteByName => borra los datos
     */
    public function uninstall()
    {
        if(!parent::uninstall() || !Configuration::deleteByName('NIEEJEMPLO')){
            return false;
        }
        return true;
    }

    /*
     * Sirve para mostrar la configuración del módulo
     */
    public function getContent(){

        $this->smarty->assign('save',false);

        if (Tools::isSubmit('submitButton')){
            $url=Tools::getValue('urlExample');
            Configuration::updateValue('NIEEJEMPLO',$url);
            $this->smarty->assign('save',true);
        }

        $this->smarty->assign('urlValue',Configuration::get('NIEEJEMPLO'));

        return $this->display(__FILE__,'configure.tpl');
    }

    /*
     * Plantilla que se mostrará en el módulo
     * smarty->assign => sirve para enviar parámetros a nuestras plantillas ".tpl"
     */
    public function hookDisplayProductAdditionalInfo($params){


        $this->context->smarty->assign('urlValue',Configuration::get('NIEEJEMPLO'));
        return $this->display(__FILE__,'product.tpl');
    }

}

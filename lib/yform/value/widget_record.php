<?php

/**
 * yform.
 *
 * @author jan.kristinus[at]redaxo[dot]org Jan Kristinus
 * @author <a href="http://www.yakamara.de">www.yakamara.de</a>
 * 
 * nach yform/values kopieren - kann direkt verwendet werden um Datensätze zu verbinden
 */

class rex_yform_value_widget_record extends rex_yform_value_abstract
{
    public function enterObject()
    {
        static $counter = 0;
        ++$counter;

        if ($this->needsOutput()) {
            $name = $this->getFieldName();
            $value = htmlspecialchars($this->getValue());
            $table = $this->getElement('table');
            $field_name = $this->getElement('field_name');
            $list_values = self::getListValues($table, $field_name, $value);
/*
            $this->params['form_output'][$this->getId()] = rex_var_yform_table_data::getListWidget(
                    $counter,$name,$value,["table"=>$table,"link"=>"index.php?page=yform/manager/data_edit&table_name=$table","fieldName"=>$field_name,"multiple"=>1,"options"=>$list_values]
                );
 * 
 */
            $this->params['form_output'][$this->getId()] = rex_var_yform_table_data::getMultipleWidget(
                    $counter,$name,$value,["table"=>$table,"link"=>"index.php?page=yform/manager/data_edit&table_name=$table","fieldName"=>$field_name,"options"=>$list_values]
                );
        }
        
        $this->params['value_pool']['email'][$this->getElement(1)] = $this->getValue();
        $this->params['value_pool']['sql'][$this->getElement(1)] = $this->getValue();
//        dump($this->getElement('table'));
//        dump($this->getElement('field_name'));
//        dump($this);
    }

    public function getDefinitions()
    {
        return [
            'type' => 'value',
            'name' => 'widget_record',
            'values' => [
                'name' => ['type' => 'name',   'label' => rex_i18n::msg('yform_values_defaults_name')],
                'label' => ['type' => 'text',    'label' => rex_i18n::msg('yform_values_defaults_label')],
                'table' => ['type' => 'text',   'label' => rex_i18n::msg('yform_widget_record_table')],
                'field_name' => ['type' => 'text',    'label' => rex_i18n::msg('yform_widget_record_field_name')],
            ],
            'description' => rex_i18n::msg('yform_values_widget_record_description'),
            'formbuilder' => false,
            'dbtype' => 'text',
        ];
    }
    
    /**
     * 
     * @param type $params
     */
    public static function getListValues($table, $field_name, $value) {
        $qry = "SELECT id, $field_name name FROM `$table` WHERE id = :id";
        
        $sql = rex_sql::factory();
        $res = [];
        foreach (explode(',',$value) as $val) {
            $sql->setQuery($qry,['id'=>$val]);
            $res[] = $sql->getArray()[0];
        }
        return $res;
    }
    
    public static function getListValue($params)
    {   
        $table = $params['params']['field']['table'];
        $field_name = $params['params']['field']['field_name'];
        $value = $params['subject'];
        $qry = "SELECT id, $field_name name FROM `$table` WHERE id = :id";
        
        $sql = rex_sql::factory();
        $res = [];
        $out = [];
        foreach (explode(',',$value) as $val) {
            $sql->setQuery($qry,['id'=>$val]);
            $res = $sql->getArray()[0];
            $out[] = $res['name'].' [id='.$res['id'].']';
            
        }
        
        return implode('<br>',$out);
    }    


    public static function getSearchField($params)
    {
        $params['searchForm']->setValueField('text', ['name' => $params['field']->getName(), 'label' => $params['field']->getLabel()]);
    }

    public static function getSearchFilter($params)
    {
        $sql = rex_sql::factory();
        $value = $params['value'];
        $field = $params['field']->getName();

        if ($value == '(empty)') {
            return ' (' . $sql->escapeIdentifier($field) . ' = "" or ' . $sql->escapeIdentifier($field) . ' IS NULL) ';
        }
        if ($value == '!(empty)') {
            return ' (' . $sql->escapeIdentifier($field) . ' <> "" and ' . $sql->escapeIdentifier($field) . ' IS NOT NULL) ';
        }

        $pos = strpos($value, '*');
        if ($pos !== false) {
            $value = str_replace('%', '\%', $value);
            $value = str_replace('*', '%', $value);
            return $sql->escapeIdentifier($field) . ' LIKE ' . $sql->escape($value);
        }
        return $sql->escapeIdentifier($field) . ' = ' . $sql->escape($value);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function Array_SwapElement(&$array, $elem1, $elem2)
{
    $tmp1 = $elem1;
    $tmp2 = $elem2;
 
    $array[array_search($elem1, $array)] = $tmp2;
    $array[array_search($elem2, $array)] = $tmp1;
}

class DynamicMenu
{
    protected static $categories = array();
    protected static $sections   = array();
    protected static $items      = array();

    public static function GetItems()
    {
        return (sizeof(self::$items) <= 0) ? array() : self::$items;
    }
        
    //    {URL, NAME, WHERE, PRIORITY}
    public static function AddMenuItem($url, $name, $where = "LAST", $priority = 0)
    {
        switch($where):
            case 'FIRST' : self::AddMenuItemFirst($url, $name, $priority);
            case 'MIDDLE': self::AddMenuItemMiddle($url, $name, $priority);
            case 'LAST'  : self::AddMenuItemLast($url, $name, $priority);
            default      : break;
        endswitch;
    }
    
    private static function AddMenuItemFirst($url, $name, $priority)
    {
        
    }
    
    private static function AddMenuItemMiddle($url, $name, $priority)
    {
        
    }
    
    /*
     * State of Priority
     * 0 = Normal
     * 1 = Hard
     * 2 = Force
     */
    
    private static function AddMenuItemLast($url, $name, $priority)
    {
        if( sizeof(self::$items) <= 0 )
        {
            $tmp = array(
                "URL"      => $url,
                "NAME"     => $name,
                "PRIORITY" => $priority
            );
            
            array_push(self::$items, $tmp);                        
        }
        
        if( $priority === 1 )
        {
            $tmp = array(
                "URL"      => $url,
                "NAME"     => $name,
                "PRIORITY" => 1
            );

            if( self::$items[sizeof(self::$items)-1]["PRIORITY"] === 2)
            {
                array_push(self::$items, $tmp);            
                
                Array_SwapElement(self::$items, self::$items[sizeof(self::$items)-1], self::$items[sizeof(self::$items)-2]);
            }
            else if( self::$items[sizeof(self::$items)-1] === 1 )
            {
                $r = rand(0, 1);

                array_push(self::$items, $tmp);               

                if( $r === 1 )
                {
                    Array_SwapElement(self::$items, self::$items[sizeof(self::$items)-1], self::$items[sizeof(self::$items)-2]);
                }
            }
            else
            {
                array_push(self::$items, $tmp);
            }            
        }
        else if( $priority === 2 )
        {
            $tmp = array(
                "URL"      => $url,
                "NAME"     => $name,
                "PRIORITY" => 2
            );

            if( self::$items[sizeof(self::$items)-1]["PRIORITY"] === 2)
            {
                $r = rand(0, 1);
                
                array_push(self::$items, $tmp);   
                
                if( $r === 1 )
                {
                    Array_SwapElement(self::$items, self::$items[sizeof(self::$items)-1], self::$items[sizeof(self::$items)-2]);
                }
            }
            else
            {
                array_push(self::$items, $tmp);
            }                        
        }
        else
        {
            $tmp = array(
                "URL"      => $url,
                "NAME"     => $name,
                "PRIORITY" => 0
            );

            if( self::$items[sizeof(self::$items)-1]["PRIORITY"] !== 0)
            {
                array_push(self::$items, $tmp);   
                
                Array_SwapElement(self::$items, self::$items[sizeof(self::$items)-1], self::$items[sizeof(self::$items)-2]);
            }
            else
            {
                $r = rand(0, 1);
                
                array_push(self::$items, $tmp);   
                
                if( $r === 1 )
                {
                    Array_SwapElement(self::$items, self::$items[sizeof(self::$items)-1], self::$items[sizeof(self::$items)-2]);
                }
            }     
        }
    }
}

DynamicMenu::AddMenuItem("FROMDM", "NO", "LAST", 2);
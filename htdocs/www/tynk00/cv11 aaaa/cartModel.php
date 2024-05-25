<?php


class Cart{

    public $items = [];

    public function __construct(){
        $this->items = $_SESSION['cart'];
    }
    public function add_item($product_id, $quantity) {
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] += $quantity;
        } else {
            $_SESSION['cart'][$product_id] = $quantity;
        }
        return $this->items = $_SESSION['cart'];
    }

    public function remove_item($product_id) {
        unset($_SESSION['cart'][$product_id]);
        return $this->items = $_SESSION['cart'];
    }
    
    public function update_item($product_id, $quantity) {
        $_SESSION['cart'][$product_id] = $quantity;
        return $this->items = $_SESSION['cart'];
    }

    public function getCount(){
        return count($this->items);
    }
    
    public function clear() {
        $_SESSION['cart'] = array();
        return $this->items = $_SESSION['cart'];
        header('Location: pages/cart.php');
    }
}


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$cart = new Cart();


if (isset($_POST['action'])) {
    if ($_POST['action'] == 'update') {
        $cart->update_item($_POST['product_id'], $_POST['quantity']);
        header('Location: pages/cart.php');
    } elseif ($_POST['action'] == 'remove') {
        $cart->remove_item($_POST['product_id']);
        header('Location: pages/cart.php');
    } elseif ($_POST['action'] == 'add') {
        $cart->add_item($_POST['product_id'], $_POST['quantity']);
        header('Location: pages/cart.php');
    } elseif ($_POST['action'] == 'clear') {
        $cart->clear();
        
    }
    
    exit;
}

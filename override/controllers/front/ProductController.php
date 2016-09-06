Class ProductController extends ProductControllerCore
{
    public function initContent()
    {
 
        if($this->context->customer->id) // only if logged in
        {
            $bought_products = $this->context->customer->getBoughtProducts(); // only valid orders
            if($bought_products)
            {
                foreach ($bought_products as $prod) {
         
                    if($prod['product_id'] = $this->product->id)
                    {
                        $this->context->smarty->assign(array(
                            'bought_on'=> $prod['date_add']
                        ));
                    }
                }
            }
        }
        parent::initContent();
    }
}

<?php
    class OrderModel extends BaseModel{
        protected $table=DB_PREFIX.'order';
        protected $field=['customerId','orderDate','total','note','status','trash'];
        protected $key='orderId';
    }
?>
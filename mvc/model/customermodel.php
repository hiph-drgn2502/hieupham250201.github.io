<?php
    class CustomerModel extends BaseModel{
        protected $table=DB_PREFIX.'customer';
        protected $field=['userId','fullname','address','phone','email','trash'];
        protected $key='customerId';
    }
?>
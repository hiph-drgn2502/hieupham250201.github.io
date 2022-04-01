<?php
    class AdminCollectionModel extends CollectionModel{
        protected $fields=['collectionName','alias','trash','status'];
        protected $key='collectionId';
    }
?>
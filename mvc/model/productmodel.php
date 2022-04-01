<?php
    class ProductModel extends BaseModel{
        protected $table=DB_PREFIX.'product';

        public function home($limit, $offset)
        {
            //Lấy sp kmai, limit sp, vi tri offset
            $sql = "select * from ".$this->table." where trash='0' and status='1' and saleprice<>'' limit $offset, $limit";
            $data['products'] = $this->queryAll($sql);
            //Chuẩn bị dữ liệu để phân trang
            $sql = "select * from ".$this->table." where trash='0' and status='1' and saleprice<>'' ";
            $totalRecords=count($this->queryAll($sql));
            $data['paging'] = new Paging('product/home/', $totalRecords, $limit, $offset);

            return  $data;
        }

        public function productByCat($catAlias, $limit, $offset)
        {
            //Nhóm sản phẩm có catAlias là $catAlias
            $catmodel= new CategoryModel;
            $cat=$catmodel->get(['alias'=>$catAlias]);
            $data['cat']=$cat;
            //Lấy các sp thuộc nhóm catId là $cat[catId]
            $data['products'] = $this->getAllLimit(['trash'=>0, 'status'=>1, 'catId'=>$cat['catId']], $limit, $offset);
            //Chuẩn bị dữ liệu để phân trang
            $totalRecords=count($this->getAll(['trash'=>0, 'status'=>1, 'catId'=>$cat['catId']]));
            $data['paging'] = new Paging('product/productByCat/'.$catAlias.'/', $totalRecords, $limit, $offset);
            return  $data;
        }

        public function productByCollection($collectionAlias, $limit, $offset)
        {
            //Nhóm sản phẩm có collectionAlias là $collectionAlias
            $collectionmodel= new CollectionModel;
            $collection=$collectionmodel->get(['alias'=>$collectionAlias]);
            $data['collection']=$collection;
            //Lấy các sp thuộc nhóm collectionId là $collection[collectionId]
            $data['products'] = $this->getAllLimit(['trash'=>0, 'status'=>1, 'collectionId'=>$collection['collectionId']], $limit, $offset);
            
            //Chuẩn bị dữ liệu để phân trang
            $totalRecords=count($this->getAll(['trash'=>0, 'status'=>1, 'collectionId'=>$collection['collectionId']]));
            $data['paging'] = new Paging('product/productByCollection/'.$collectionAlias.'/', $totalRecords, $limit, $offset);
            return  $data;
        }

        public function productDetail($productAlias)
        {
            //Lấy 1 sp có alias = productAlias
            $data['currentproduct'] = $this->get(['alias'=>$productAlias]);
            //Lấy các sản phẩm cùng nhóm
            $data['sameProducts'] = $this->getAll(['trash'=>0, 'status'=>1, 'catId'=>$data['currentproduct']['catId']]);
            return  $data;
        }

        public function productSearch($searchKey, $limit, $offset)
        {
            //Lấy ra các sản phẩm thỏa yc tìm kiếm, $limit, $offset
            $sql = "select * from $this->table where trash='0' and status='1' and productName like '%$searchKey%' limit $offset, $limit";
            //Thực thi câu lênh
            $data['products']=$this->queryAll($sql);

            $sql = "select * from $this->table where trash='0' and status='1' and productName like '%$searchKey%'";
            $totalRecords=count($this->queryAll($sql));
            $data['totalRecords']=$totalRecords;
            $data['paging'] = new Paging('product/productBySearch/', $totalRecords, $limit, $offset);
            return  $data;
        }
    }
?>
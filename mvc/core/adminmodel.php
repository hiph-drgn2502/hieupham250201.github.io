<?php
    class AdminModel extends BaseModel{
        //Các hàm insert, update
        function insert($data){
            $dataString="'".implode("','",$data)."'";
            $fieldString=implode(',',$this->field);
            $sql="insert into $this->table($fieldString) values($dataString)";
            return $this->query($sql);
        }

        function update($data, $key){
            $sql="update $this->table set ";
            foreach($data as $k=>$v){
                $sql.=" $k='$v',";
            }
            $sql=substr($sql,0,strlen($sql)-1);
            $sql.=" where $this->key=$key";
            return $this->query($sql);
        }

        function delete($key){
            $sql="delete from $this->table where $this->key=$key";
            return $this->query($sql);
        }

        public function toggle($field, $key)
        {
            $current=$this->get([$this->key=>$key])[$field];
            if($current == 0){
                $sql="update $this->table set $field=1 where $this->key=$key";
            }else{
                $sql="update $this->table set $field=0 where $this->key=$key";
            }
            return $this->query($sql);
        }
    }
?>
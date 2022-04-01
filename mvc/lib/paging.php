<?php
class Paging{
    public $limit;
    public $offset;
    public $basepath;
    public $totalRecords;
    public $totalPages;
    public $currentPage;
    function __construct($basepath, $totalRecords, $limit, $offset){
        $this->basepath=$basepath;
        $this->totalRecords=$totalRecords;
        $this->limit=$limit;
        $this->offset=$offset;

        $this->totalPages=ceil($this->totalRecords/$this->limit);
        $this->currentPage=ceil(($this->offset+1)/$this->limit);
    }

    function createLinks(){
        $htmltext='<nav aria-label="Page navigation example">';
            $htmltext.='<ul class="pagination">';
            //Xuất ra link previous, fisrt
            if($this->currentPage != 1){
                $htmltext.='<li class="page-item"><a class="page-link text-muted" href="'.BASE_URL.$this->basepath.$this->limit.'/0'.'"><span aria-hidden="true">&laquo;</span></a></li>';
                $htmltext.='<li class="page-item"><a class="page-link text-muted" href="'.BASE_URL.$this->basepath.$this->limit.'/'.($this->currentPage-2)*$this->limit.'"><span aria-hidden="true">&lsaquo;</span></a></li>';
            }

            //Xuất ra Link tới các trang
            for($i=1; $i<=$this->totalPages;$i++){
                if($i==$this->currentPage)
                    $htmltext.='<li class="page-item"><a class="page-link text-dark" href="'.BASE_URL.$this->basepath.$this->limit.'/'.($i-1)*$this->limit.'">'.$i.'</a></li>';
                else
                    $htmltext.='<li class="page-item"><a class="page-link text-muted" href="'.BASE_URL.$this->basepath.$this->limit.'/'.($i-1)*$this->limit.'">'.$i.'</a></li>';
            }

            //Xuất ra link next, last
            if($this->currentPage != $this->totalPages){
                $htmltext.='<li class="page-item"><a class="page-link text-muted" href="'.BASE_URL.$this->basepath.$this->limit.'/'.$this->currentPage*$this->limit.'"><span aria-hidden="true">&rsaquo;</span></a></li>';
                $htmltext.='<li class="page-item"><a class="page-link text-muted" href="'.BASE_URL.$this->basepath.$this->limit.'/'.($this->totalPages-1)*$this->limit.'"><span aria-hidden="true">&raquo;</span></a></li>';
            }
            $htmltext.='</ul>';
        $htmltext.='</nav>';
        echo $htmltext;
    }
}

<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Table {
    public $fields;
    public $query;

    public $data;
    public $cur_page;
    public $first_page;
    public $last_page;
    public $prev_page;
    public $next_page;
    public $count;
    public $total;

    public $offset;
    public $limit = 30;

    public function __construct () {}

    public function render () {
        if (isset($this->fields) AND isset($this->query)) {
            $this->total        = $this->query->reset(FALSE)->count_all();

            $this->cur_page     = (int) (isset($_GET['p']) ? $_GET['p'] : 1);
            $this->last_page    = ceil($this->total/$this->limit);
            $this->last_page    = $this->last_page == 0 ? 1 : $this->last_page;
            $this->first_page   = 1;

            $this->cur_page     = $this->cur_page < 1 ? 1 : ($this->cur_page > $this->last_page ? $this->last_page : $this->cur_page);
            $this->next_page    = ($this->cur_page == $this->last_page) ? FALSE : $this->cur_page + 1;
            $this->last_page    = ($this->cur_page == $this->last_page) ? FALSE : $this->last_page;
            $this->first_page   = ($this->cur_page == $this->first_page) ? FALSE : $this->first_page;
            $this->prev_page    = $this->cur_page == 1 ? FALSE : $this->cur_page - 1;

            $this->offset       = ($this->cur_page - 1) * $this->limit;

            $this->data         = $this->query->limit($this->limit)->offset($this->offset)->find_all();
            $this->count        = count($this->data);

            return View::factory('shared/table', array('table' => $this));
        } else {
            // Error
        }
    }

    public function __toString () {
        return $this->render();
    }
}

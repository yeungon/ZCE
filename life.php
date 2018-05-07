<?php
/**
 * @category   life definition
 * @author     Vuong
 */
interface life{
    const _LIFE = ["analytic_approach"=>["wittgenstein"=>"the case"],
                  "continental" => ["heidegger" => "being in the world", "camus" =>"absurdity"],
                  "marxism" => ["lenin" => "lương là một loại phạm trù, không quan trọng con số", "marx" => ["student" =>"nông dân và thầy giáo học khác lớp", "bourgeoisie" => "ngu và ghét thầy giáo", "objective" => "cải tạo thế giới"]]
    ];
    public function live();
    public function die();
}
trait career{
    public $job;
    public $livingstandard = "abcxyz";
    public $luong;
    public function kiếm_ăn($job){
        $this->job = $job;
        echo $this->job>0 ? "cool": "upps...";
    }
    public function salary($luong){
        $this->luong  = $luong;
        echo strlen($this->luong) >= strlen($this->livingstandard)?"fine":"sống thế nào đây yups...";
    }
    public function skills($number){
        $this->skills = self::_LIFE;
        echo count($this->skills)>=$number?"oh that is good!":" who cares ? ";
    }
}
class mylife implements life {
    use career;
    public function live(){}
    public function die(){}
}
$me = new mylife;

echo "mần ăn: ", $me->kiếm_ăn(1), "|lương lậu: ", $me->salary("abc"), "|võ vẽ: ", $me->skills(4);
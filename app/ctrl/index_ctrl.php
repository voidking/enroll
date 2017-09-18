<?php
namespace app\ctrl;
include CORE.'/render.php';

class index_ctrl extends \core\render{
    public function index(){
        $this->smarty->assign('basepath', $this->basepath);
        $this->smarty->assign('assets', $this->assets);
        
        $this->smarty->display('index/index.html');
    }

    public function register(){
        if(!(isset($_REQUEST['name'])
            && isset($_REQUEST['gender'])
            && isset($_REQUEST['grade'])
            && isset($_REQUEST['education'])
            && isset($_REQUEST['school'])
            && isset($_REQUEST['institute'])
            && isset($_REQUEST['major'])
            && isset($_REQUEST['bus'])
            && $_REQUEST['name'] != ''
            && $_REQUEST['gender'] != ''
            && $_REQUEST['grade'] != ''
            && $_REQUEST['education'] != ''
            && $_REQUEST['school'] != ''
            && $_REQUEST['institute'] != ''
            && $_REQUEST['major'] != ''
            && $_REQUEST['bus'] != '')
        ){
            $result = array(
                'code' => '-1',
                'ext' => '所有参数不能为空'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }

        $data['name'] = $_REQUEST['name'];
        $data['gender'] = $_REQUEST['gender'];
        $data['grade'] = $_REQUEST['grade'];
        $data['education'] = $_REQUEST['education'];
        $data['school'] = $_REQUEST['school'];
        $data['institute'] = $_REQUEST['institute'];
        $data['major'] = $_REQUEST['major'];
        $data['bus'] = $_REQUEST['bus'];

        $student_model = new \app\model\student();
        $success = $student_model->add($data);
        if($success){
            $result['code'] = '0';
            $result['ext'] = '写入成功！';
            $result['stu_id'] = $success;
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        }else{
            $result['code'] = '-2';
            $result['ext'] = '写入数据库失败！';
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        }
    }

    public function success(){
        if(!(isset($_REQUEST['name'])
            && isset($_REQUEST['stu_id'])
            && $_REQUEST['name'] != ''
            && $_REQUEST['stu_id'] != '')
        ){
            $result = array(
                'code' => '-1',
                'ext' => '所有参数不能为空'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }
        $name = $_REQUEST['name'];
        $stu_id = $_REQUEST['stu_id'];
        $this->smarty->assign('name',$name);
        $this->smarty->assign('stu_id',$stu_id);
        $this->smarty->assign('assets', $this->assets);
        $this->smarty->display('index/success.html');
    }
}
<?php

class SourceModel extends CI_Model {

    public function getSourceList() {
        $this->db->select("a.*,b.name as username");
        $this->db->from("source as a");
        $this->db->join("users as b", "a.user_id = b.id", "LEFT");
        $this->db->where("a.status", "TRUE");
        $result = $this->db->get()->result_array();
        $sourceCount = count($result);
        if ($sourceCount > 0) {
            return array("status" => "SUCCESS", "value" => array("list" => $result, "count" => $sourceCount), "message" => "Source List is present");
        } else {
            return array("status" => "ERR", "value" => array(), "message" => "No Source Found");
        }
    }

    public function saveNewSource($dataArr) {
        $result = $this->db->insert("source", $dataArr);
        if (count($result) > 0) {
            return array("status" => "SUCCESS", "value" => $result, "msg" => "source details saved successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to save new source.");
        }
    }

    public function saveSourceReportData($dataArr) {
        
        $this->db->where('source_id', $dataArr['source_id']);
        $updateResult = $this->db->update('seo_data', array('status' => 'FALSE'));
        
        $result = $this->db->insert("seo_data", $dataArr);
        if (count($result) > 0) {
            return array("status" => "SUCCESS", "value" => $dataArr, "msg" => "report data saved successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to save new source.");
        }
    }

    public function updateSourceDetails($dataArr, $updateId) {
        $this->db->where('id', $updateId);
        $updateResult = $this->db->update('source', $dataArr);
        if ($this->db->affected_rows() > 0) {
            return array("status" => "SUCCESS", "value" => "1", "msg" => "source details saved successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to updae source details.");
        }
    }

    public function deleteSource($deleteId) {
        $this->db->where('id', $deleteId);
        $deleteResult = $this->db->update('source', array("status" => 'FALSE'));
        if ($this->db->affected_rows() > 0) {
            return array("status" => "SUCCESS", "value" => "1", "msg" => "source deleted successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to delete source.");
        }
    }

    public function saveSourceByExcel($dataArr) {
        $result = $this->db->insert_batch('source', $dataArr);

        if (count($result) > 0) {
            return array("status" => "SUCCESS", "value" => $result, "msg" => "sources details saved successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to save sources by excel.");
        }
    }

    public function getSourceReportDetails($sourceId) {
        $this->db->select("a.*,b.source_link as source_link,b.comment");
        $this->db->from("seo_data as a");
        $this->db->join("source as b", "a.source_id = b.id");
        $this->db->where("a.status", "TRUE");
        $this->db->where("b.id", $sourceId);
        $result = $this->db->get()->result_array();
        if ($result > 0) {
            return array("status" => "SUCCESS", "value" => $result, "message" => "Source Report is present");
        } else {
            return array("status" => "ERR", "value" => array(), "message" => "Source Report Not Found");
        }
    }

}

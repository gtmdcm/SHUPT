<?php
/**
 * Created by PhpStorm.
 * User: jackysong
 * Date: 2018/3/31
 * Time: 上午11:35
 */

namespace App\Services;

use Aws\S3\S3Client;

class S3
{
    private $key = '0SDK2DBIRCL31F6DAHZB';
    private $secret = 'fjwSwZZ5hUNjcs78jo0GSYTl4B91rqPif5fbExr6';

    private $s3Client;

    public function __construct(){
        $this->s3Client=new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'endpoint' => 'http://localhost:9000',
            'use_path_style_endpoint' => true,
            'credentials' => [
                'key'    => $this->key,
                'secret' => $this->secret,
            ],
        ]);
    }

    public function putObject($bucket,$key,$sourcefile){
        return $this->s3Client->putObject([
            'Bucket' => $bucket,
            'Key'    => $key,
            'SourceFile'   => $sourcefile
        ]);
    }

    public function getObject($bucket,$key,$saveas){
        return $this->s3Client->getObject([
            'Bucket' => $bucket,
            'Key' => $key,
            'SaveAs' => $saveas
        ]);
    }
}
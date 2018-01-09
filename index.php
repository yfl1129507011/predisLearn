<?php
include 'config.php';

$client = new Predis\Client($single_server);

/**
 * 字符串操作
 */
//$client->set('name', 'yfl');
//$res = $client->get('name');
//if($client->exists('name')){
//    $client->del(['name']);
//}
//$res = $client->get('name');
//var_dump($res);

/*$mkv = array(
    'a' => '123',
    'b' => '456',
    'c' => '789',
);*/
//$client->mset($mkv);
//$res = $client->mget(array_keys($mkv));
//$res = $client->del(array_keys($mkv));  //返回删除成功的数  3
//var_dump($res);

//$client->set('age', 25);
//$client->incr('age');
//$client->decr('age');

/**
 * hash操作
 */
//$client->hset('kol','name','abc');
//$client->hset('kol','age','45');
//$client->hset('kol','status','No1');
//$client->del(['kol']);

//$client->hset('kol:1','name','曹丕');
//$client->hset('kol:1','age','45');
//$client->hset('kol:1','status','魏文帝');
//$client->hset('kol:2','name','刘协');
//$client->hset('kol:2','age','68');
//$client->hset('kol:2','status','汉献帝');

//$res = $client->hget('kol:2','age');
//$client->hdel('kol:2',['name','age']);
//$res = $client->hgetall('kol:2');
//var_dump($res);

/*$client->hmset('kol:3', array(
    'name' => '司马炎',
    'age' => 54,
    'status' => '晋武帝'
));*/
//$res = $client->hmget('kol:3',['name','age']);
//var_dump($res);die;

//$hKeys = $client->hkeys('kol:1');
//var_dump($hKeys);
//$hVals = $client->hvals('kol:1');
//var_dump($hVals);

/**
 * 列表操作
 */
//$client->lpush('list',[1,2,3,4,5]);
//$res = $client->lpop('list');
//$res = $client->llen('list');
//$res = $client->lrange('list',0,$client->llen('list'));
//var_dump($res);

/**
 * 集合操作
 */
//$client->sadd('set', [1,2,3,4,5,6,7,8,9]);
//$res = $client->smembers('set');
//var_dump($res);
//$res = $client->scard('set');   // 9

//$client->sadd('get',[1,3,5,7,9,1]);

//$res = $client->sdiff(['set','get']);  // 2,4,6,8
//$res = $client->sinter(['set','get']);  // 1,3,5,7,9
//var_dump($res);

/**
 * 有序集合操作
 */
$client->zadd('sort_set',array('redis'=>1,'mongodb'=>2,'mysql'=>3));
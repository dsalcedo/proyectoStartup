<?php

namespace App\Models\MongoDb;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Eloquent {

    protected $connection = 'mongodb';
    protected $collection = 'ubicaciones';
    /*

{
"_id" : ObjectId("574a746753fb43ae8ed1f59c"),
"location" : {
"coordinates" : [
-73.9653967,
40.6064339
],
"type" : "Point"
},
"name" : "Seuda Foods"
}


{
    "_id" : ObjectId("574a748a53fb43ae8ed1f59d"),
    "location" : {
    "coordinates" : [
        -73.9782204,
        40.6435254
    ],
        "type" : "Point"
    },
    "name" : "Carvel Ice Cream"
}


{
    "_id" : ObjectId("574a749d53fb43ae8ed1f59e"),
    "location" : {
    "coordinates" : [
        -73.9829239,
        40.6580753
    ],
        "type" : "Point"
    },
    "name" : "The Movable Feast"
}
    */
    //db.ubicaciones.createIndex({ location: "2dsphere" })

    /*db.ubicaciones.find( { location :
                         { $near :
                           { $geometry :
                              { type : "Point" ,
                                coordinates : [ -73.93414657, 40.82302903 ] } ,
                             $maxDistance : 100000
                      } } } );*/

}




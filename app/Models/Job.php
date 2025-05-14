<?php


namespace App\Models;
use \Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
  use HasFactory;
  
  protected $table = 'job_listings';

  protected $guarded = [];

  public function employer() {
    return $this->belongsTo(Employer::class);
  }

  public function tags() {
    return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
  }
}

// Lazy Loading
// Lazy loading refers to the delay of a SQL query until the last possible moment
<?php namespace App\Models;
use CodeIgniter\Model;
class BookModel extends Model {
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
}
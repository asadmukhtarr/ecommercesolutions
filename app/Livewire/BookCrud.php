<?php

namespace App\Livewire;

use Livewire\Component;

class BookCrud extends Component
{
    public $title, $author, $price, $book_id;


    public function render()
    {
        return view('livewire.book-crud',[
            'books' => Book::latest()->get()

        ])->layout('components.layouts.app');
    }
     public function resetFields()
    {
        $this->title = '';
        $this->author = '';
        $this->price = '';
        $this->book_id = null;
    }
     public function store()
    {
        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'price' => $this->price,
        ]);

        $this->resetFields();
    }
    public function edit($id)
    {
        $book = Book::find($id);
        $this->book_id = $book->id;
        $this->title = $book->title;
        $this->author = $book->author;
        $this->price = $book->price;
    }
     public function update()
    {
        $book = Book::find($this->book_id);

        $book->update([
            'title' => $this->title,
            'author' => $this->author,
            'price' => $this->price,
        ]);

        $this->resetFields();
    }
     public function delete($id)
    {
        Book::find($id)->delete();
    }
}

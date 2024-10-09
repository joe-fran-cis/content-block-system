@extends('layouts.header')

@section('title', 'Pages')

@section('content')
    <h1 class="mb-4">Pages</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Text Blocks</th>
                    <th>Image Blocks</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->description }}</td>
                        <td>
                            @foreach ($page->contentBlocks as $block)
                                @if ($block->type == 'text')
                                    <p>{{ $block->content }}</p>
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($page->contentBlocks as $block)
                                @if ($block->type == 'image')
                                    <img src="{{ $block->content }}" alt="Image Block" class="img-fluid" style="max-width: 100px;">
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

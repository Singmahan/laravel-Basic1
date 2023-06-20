<x-app-layout>
    <div style="padding-left: 40%; padding-top: 10%">
        <label style="padding-left: 20%; font-size: 20px; font-weight: bold;">Add Post</label>
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">Description</label>
                <input type="text" name="description" id="">
            </div>
            <div>
                <label for="">Upload File</label>
                <input type="file" name="image" id="">
            </div>
            <div>
                <input type="submit" name="" style="background: skyblue; cursor: pointer;
                padding: 10px; border-radius: 10px">
            </div>
        </form>
    </div>
</x-app-layout>

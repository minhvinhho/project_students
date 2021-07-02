<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<?php if(isset($_SESSION['error'])){?>
<div class="flex flex-col space-y-4 items-end justify-center bg-gray-100 mb-2">
  <div class="alert flex flex-row items-end bg-red-200 p-5 rounded border-b-2 border-red-300">
    <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
      <span class="text-red-500">
        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </span>
    </div>
    <div class="alert-content ml-4">
      <div class="alert-title font-semibold text-lg text-red-800">Thông báo</div>
      <div class="alert-description text-sm text-red-600"><?php echo $_SESSION['error']; ?>..!</div>
    </div>
  </div>
</div>
<?php unset($_SESSION['error']);}?>
<?php if(isset($_SESSION['success'])){?>
<div class="flex flex-col items-end justify-center bg-gray-100 mb-2">
  <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
    <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
      <span class="text-green-500">
        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
      </span>
    </div>
    <div class="alert-content ml-4">
      <div class="alert-title font-semibold text-lg text-green-800">Thông báo</div>
      <div class="alert-description text-sm text-green-600"><?php echo $_SESSION['success']; ?>..!</div>
    </div>
  </div>
</div>
<?php unset($_SESSION['success']);}?>

<body x-data="{ showModal1: false , showModal2: false, showModal3: false  }" :class="{'overflow-y-hidden': showModal1}">


    <!-- Modal1 -->
    <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
        x-show="showModal1" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
            <div class="relative bg-white shadow-lg rounded-md text-gray-900 z-20" @click.away="showModal1 = false"
                x-show="showModal1" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100"
                x-transition:leave-end="scale-0">
                <header class="flex items-center justify-between p-2">
                    <h2 class="font-semibold">CHỈNH SỬA THÔNG TIN</h2>
                    <button class="focus:outline-none p-2" @click="showModal1 = false">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </button>
                </header>
                <form action="../teacher/editTeacher" method="post">
                    <div class="px-5 py-7">
                        <input hidden class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" type="text"
                            id="teacher_id" name="teacher_id" />
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Tên giáo viên</label>
                        <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            id="teacher_name" name="teacher_name" />
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Giới tính</label>
                        <select name="gender" class=" border rounded-lg px-3 py-3 mt-1 mb-5 text-sm w-full"  >
                            <option>Nam</option>
                            <option>Nữ</option>
                            <option>Khác</option>
                        </select>
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Địa chỉ</label>
                        <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" id="address"
                            name="address" />
                        <button name="btnSubmit" type="submit"
                            class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                            <span class="inline-block mr-2">Cập nhập</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal2 -->
    <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
        x-show="showModal2" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
            <div class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20" @click.away="showModal2 = false"
                x-show="showModal2" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100"
                x-transition:leave-end="scale-0">

                <main class="p-3 text-center">
                    <div class="text-center p-5 flex-auto justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <h2 class="text-xl font-bold py-4 ">Xác nhận?</h3>
                            <p class="text-sm text-gray-500 px-8">Bạn có chắc muốn xóa môn học này?
                                Bạn sẽ không thể lấy lại dữ liệu đã nhập</p>
                    </div>
                </main>
                <div class="p-3  mt-2 text-center space-x-4 md:block">
                    <button @click="showModal2 = false"
                        class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                        Hủy bỏ
                    </button>
                    <a href="" id="deleteSubject"><button
                            class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Xóa</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal3 -->
    <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
        x-show="showModal3" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
            <div class="relative bg-white shadow-lg rounded-md text-gray-900 z-20" @click.away="showModal3 = false"
                x-show="showModal3" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100"
                x-transition:leave-end="scale-0">
                <header class="flex items-center justify-between p-2">
                    <h2 class="font-semibold">THÊM GIÁO VIÊN</h2>
                    <button class="focus:outline-none p-2" @click="showModal3 = false">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </button>
                </header>
                <form action="../teacher/addTeacher" method="POST">
                    <div class="px-5 py-7">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Tên giáo viên</label>
                        <input type="text" name="teacher_name"
                            class=" border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                            name="" />
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Giới tính</label>
                        <!-- <input type="text" name="gender"
                            class=" border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" 
                             /> -->
                        <select name="gender" class=" border rounded-lg px-3 py-3 mt-1 mb-5 text-sm w-full"  >
                            <option>Nam</option>
                            <option>Nữ</option>
                            <option>Khác</option>
                        </select>
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Địa chỉ</label>
                        <input type="text" name="address"
                            class=" border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" 
                            name="" />
                        <button name="btnSubmit" type="submit"
                            class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                            <span class="inline-block mr-2">Cập nhập</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full"
                        src="https://picsum.photos/1200/400">
                </div>
                <button class="bg-blue-500 hover:bg-gray-400  text-white font-bold py-2 px-4 rounded mt-2"
                    @click="showModal3 = true">
                    Thêm giáo viên
                </button>
                
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">QUẢN LÝ GIÁO VIÊN</h2>
                            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                            <p class="text-base">Bạn có thể xem và chỉnh sửa thông tin các môn học.</p>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Tên giáo viên</th>
                                    <th class="py-3 px-6 text-left">Giới tính</th>
                                    <th class="py-3 px-6 text-center">Địa chỉ</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <?php
                                if(isset($data['teacher'])){
                                    foreach ($data['teacher'] as $data){
                                        ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                <?php echo $data["teacher_name"] ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">

                                            <span class="font-medium">
                                                <?php echo $data["gender"] ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">

                                            <span class="font-medium">
                                                <?php echo $data["address"] ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">

                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">

                                                <a herf="javascript:void(0)"
                                                    onclick="edit_Data(<?php echo $data["teacher_id"] ?>,'<?php echo $data["teacher_name"] ?>','<?php echo $data["gender"] ?>','<?php echo $data["address"] ?>')">
                                                    <svg @click="showModal1 = true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a herf="javascript:void(0)"
                                                    onclick="delete_Data(<?php echo $data["teacher_id"] ?>)">
                                                    <svg @click="showModal2 = true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }}
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    function edit_Data(teacher_id, teacher_name, gender, address) {
        $('#teacher_id').val(teacher_id);
        $('#teacher_name').val(teacher_name);
        $('#gender').val(gender);
        $('#address').val(address);
    }
    function delete_Data(subject_id) {
        $subject_id = "../teacher/deleteTeacher/" + subject_id;
        document.getElementById("deleteSubject").setAttribute("href", $subject_id);
    }
   
    </script>
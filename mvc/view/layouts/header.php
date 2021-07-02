<?php $url='http://testapp.dev' ?>
<header class="h-24 sm:h-32 flex items-center">
    <div class="container mx-auto px-6 sm:px-12 flex items-center justify-between">
        <div class="font-black text-blue-900 text-2xl flex items-start">
            STUDENTS<span class="w-3 h-3 rounded-full bg-purple-600 ml-2"></span>
        </div>
        <div class="flex items-center">
            <nav class="text-purple-900 text-lg hidden lg:flex items-center">
                <a href="<?php echo $url ?>/" class="py-2 px-8 flex hover:text-red-500 font-bold">
                    Trang chủ
                </a>
                <a href="<?php echo $url ?>/home/showeditpage" class="py-2 px-8 flex hover:text-red-500 font-bold">
                    Quản Lý
                </a>
                <a href="#" class="py-2 px-8 flex hover:text-red-500 font-bold">
                    Chi tiết
                </a>
            </nav>
            <button class="flex flex-col ml-4">
                <span class="w-6 h-1 rounded-full bg-purple-800 mb-1"></span>
                <span class="w-6 h-1 rounded-full bg-purple-800 mb-1"></span>
                <span class="w-6 h-1 rounded-full bg-purple-800 mb-1"></span>
            </button>
        </div>
    </div>
</header>
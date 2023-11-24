@extends("layouts.master")

@section("main")
        <div>
            <a class="btn btn--primary" href="/create">
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M12 6V18" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Thêm sinh viên
            </a>
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>MSSV</th>
                    <th>Họ và tên</th>
                    <th>Lớp</th>
                    <th>Năm sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th></th>
                </tr>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->birth_year }}</td>
                        <td>{{ $student->gender == 'F' ? 'Nữ' : 'Nam' }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->phone_number }}</td>
                        <td>
                            <div style="display: flex; flex-direction: row; gap: 10px">
                            <a class="btn btn--primary --color-yellow" href="/update/{{ $student->student_id }}">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H9M15 5H17C18.1046 5 19 5.89543 19 7V9" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.902 20.3343L12.7153 20.7716L13.1526 18.585C13.1914 18.3914 13.2865 18.2136 13.4261 18.074L17.5 14L19.5 12L21.4869 13.9869L19.4869 15.9869L15.413 20.0608C15.2734 20.2004 15.0956 20.2956 14.902 20.3343Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <button class="btn btn--primary --color-red js-btn-del" id="{{ $student->student_id }}">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4 7H20" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
@stop

@section('script')
    <script>
        async function handleDelete(e) {
            try {
                const response = await fetch(`/delete/${e.currentTarget.id}`, {
                    method: 'DELETE',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                });
                const data = await response.json();

                if(data.ok) {
                    window.location.reload();
                }

            } catch(err) {
                console.log(err);
            }
        }

        let btns = document.querySelectorAll('.js-btn-del');

        btns.forEach(function(el) {
            el.addEventListener('click', (e) => {
                handleDelete(e);
            })
        })

    </script>
@stop

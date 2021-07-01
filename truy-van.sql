-- BAI LAM -------------------------------------------------------------------------------

-- tinh diem tb
Select points.students_id, students.students_name, AVG(points.point) AVG_Students
From points, students
group by points.students_id


--xep hang sinh vien
Select points.students_id, AVG(points.point) as AVG_Stu,
CASE
WHEN AVG(point) >= 8 THEN 'Giỏi'
WHEN  AVG(point) >= 6.5 THEN 'Khá'
WHEN AVG(point) >= 5 THEN 'Trung Bình'
ELSE 'Yếu'
END rank_stu
From points Group By students_id

--thong ke sinh vien theo khoa
SELECT faculty.faculty_id,faculty.faculty_name , Count(students_id) as quantity_stu
FROM faculty 
INNER JOIN class ON faculty.faculty_id = class.faculty_id
INNER JOIN students ON class.class_id = students.class_id
GROUP BY faculty.faculty_id

--thong ke mon hoc theo khoa
SELECT faculty.faculty_id, faculty.faculty_name, Count(subject.subject_id) as quantity_subj
FROM faculty 
INNER JOIN class ON faculty.faculty_id = class.faculty_id
INNER JOIN students ON class.class_id = students.class_id
INNER JOIN points ON students.students_id = points.students_id
INNER JOIN subject ON points.subject_id = subject.subject_id
GROUP BY faculty.faculty_id

--Thống kê điểm TB cua SV theo lớp học
Select points.students_id, students.students_name ,class.class_id ,class.class_name ,AVG(points.point) AVG_Students
From points, class, students
group by class.class_id

--Thông kê điểm thi TB sinh viên có lần thi cuối cùng
-- Select points.students_id, AVG(points.point) AVG_Students, points.times
-- From points
-- where points.times >=2
-- group by points.students_id
Select points.students_id, AVG(points.point) AVG_Students, max(times)
From points
group by points.students_id

--Thống kê điểm của sinh viên đạt điểm TB 8 trở lên của mỗi khoa, và điểm dưới 5 của mỗi khoa
-- 8 diem tro len
Select points.students_id, AVG(points.point) AVG_Students
From points
group by points.students_id
having  AVG_Students > 8

-- duoi 5 diem
Select points.students_id, AVG(points.point) AVG_Students
From points
group by points.students_id
having  AVG_Students < 5

--sinh vien theo mon
select subject.subject_id, count(students_id)
from subject, points
where subject.subject_id = points.subject_id
group by subject.subject_name




import './bootstrap';
import { createApp } from 'vue';
import * as VueRouter from 'vue-router';


import ReportList from './components/report/List.vue';
import Student from './components/student/Student.vue';
import Teacher from './components/teacher/Teacher.vue';
import Subject from './components/subject/Subject.vue';
import Edit from './components/student/Edit.vue';
import EditTeacher from './components/teacher/EditTeacher.vue';
import EditSubject from './components/subject/EditSubject.vue';
import TeacherSubject from './components/teacherSubject/TeacherSubject.vue';
import StudentSubject from './components/studentSubject/StudentSubject.vue';


const routes =[
    {
        path: '/',
        component: ReportList
    },
    {
        path: '/students',
        component: Student
    },
    {
        path: '/teachers',
        component: Teacher
    },
    {
        path: '/subjects',
        component: Subject
    },
    {
        path: '/edit/:id',
        component: Edit
    },
    {
        path: '/editTeacher/:id',
        component: EditTeacher
    },
    {
        path: '/editSubject/:id',
        component: EditSubject
    },
    {
        path: '/teachers-subjects',
        component: TeacherSubject
    },
    {
        path: '/students-subjects',
        component: StudentSubject
    }

]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes,
  })

const app = createApp({});

app.use(router)

app.mount('#app');

SELECT *
FROM (

SELECT title AS name, author_id AS commission
FROM news
)X
WHERE commission <80


 SELECT concat( title, ' WORKS AS A ', text ) AS msg
FROM news
LIMIT 0 , 50
/*
вывод в один столбец
*/


select title, author_id,
        case when author_id <= 76 then 'UNDERPAID' 
             when author_id >= 80 then 'OVERPAID' 

             else 'OK' 
        end as status 
   from news
/*
конструкция case else 
*/


select title, author_id
from news
ORDER BY rand() LIMIT 2/*randdom*/


 select * 
  from emp 
 where comm is null
/*поиск нулевого значения только нак и не = или != не прокатит*/


select id, title, text, rate
from news
where id <= 20
or rate <= 100
order by id, rate asc

/*сортировка по двум столбцам */


SELECT name, tel
FROM addbook
ORDER BY substr( name, length( name ) -2 )
/* сортировка по строке*/

/*далее идут объединения */


select e.id, e.title, d.id as num, d.name  
   from news e, addbook d 
  where e.id = d.id
    /**/
SELECT id_product, name
FROM products
WHERE id_product NOT
IN (

SELECT id
FROM news
)
/*все не содержащиеся во вложеном*/

select d.deptno 
  from dept d 
 where not exists ( select null 
                      from emp e 
                     where d.deptno = e.deptno )
/*все не содержащиеся во вложеном*/


SELECT d . *
FROM news d
LEFT OUTER JOIN products e ON ( d.id = e.id_product )
WHERE e.id_product IS NOT NULL /*выводит все из новостей */



/*выборка строк из трех таблиц*/


select e.id, d.id_product, eb.id as num, eb.name
  from news e, products d, addbook eb
 where e.id=d.id_product 
   and e.id=eb.id



 select e.ename, d.loc, eb.received 
2   from emp e join dept d 
3     on (e.deptno=d.deptno) 
4   left join emp_bonus eb 
5     on (e.empno=eb.empno)
6  order by 2



 select e.ename, d.loc,
2        (select eb.received from emp_bonus eb 
3          where eb.empno=e.empno) as received 
4   from emp e, dept d 
5  where e.deptno=d.deptno
6  order by 2 /*скалярный подзапрос*/




/*выявление одинаковых данных в двух таблицах*/
 select *
      from (
    select e.empno,e.ename,e.job,e.mgr,e.hiredate,
           e.sal,e.comm,e.deptno, count(*) as cnt
     from emp e
    group by empno,ename,job,mgr,hiredate,
             sal,comm,deptno
          ) e
    where not exists (
   select null
     from (
   select v.empno,v.ename,v.job,v.mgr,v.hiredate,
          v.sal,v.comm,v.deptno, count(*) as cnt
     from v
    group by empno,ename,job,mgr,hiredate,
             sal,comm,deptno
          ) v
     where v.empno    = e.empno
       and v.ename    = e.ename
       and v.job      = e.job
       and v.mgr      = e.mgr
       and v.hiredate = e.hiredate
       and v.sal      = e.sal
       and v.deptno   = e.deptno
       and v.cnt      = e.cnt
       and coalesce(v.comm,0) = coalesce(e.comm,0)
   )
    union all
   select *
     from (
   select v.empno,v.ename,v.job,v.mgr,v.hiredate,
          v.sal,v.comm,v.deptno, count(*) as cnt
     from v
    group by empno,ename,job,mgr,hiredate,
             sal,comm,deptno
          ) v
    where not exists (
  select null
   from (
   select e.empno,e.ename,e.job,e.mgr,e.hiredate,
          e.sal,e.comm,e.deptno, count(*) as cnt
     from emp e
    group by empno,ename,job,mgr,hiredate,
             sal,comm,deptno
          ) e
     where v.empno    = e.empno
       and v.ename    = e.ename
       and v.job      = e.job
       and v.mgr      = e.mgr
       and v.hiredate = e.hiredate
       and v.sal      = e.sal
       and v.deptno   = e.deptno
       and v.cnt      = e.cnt
       and coalesce(v.comm,0) = coalesce(e.comm,0)


/*выявление одинаковых данных в двух таблицах*/










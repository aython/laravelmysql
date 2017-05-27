class Employee:
      raise_amount = 1.04
      num_of_empl = 0
      def __init__(self, first, last, pay):
          self.first2 = first
          self.last2 = last
          self.pay2 = pay
          self.email2 = first + "." + last + "@altimetrik.com"
          Employee.num_of_empl += 1
      def fullname(self):
          return '{} {}'.format(self.first2,self.last2)

      def appraisel(self):
          self.pay2 = int(self.pay2 * self.raise_amount)
#Another way is by calling Classname.Variable Name
          #self.pay2 = int(self.pay2 * Employee.raise_amount)
          return self.pay2

#this is class method
      @classmethod
      def set_raise_amt(clss, amount):
          clss.raise_amount = amount

      @classmethod
      def from_string(clss, emp_str):
          first2, last2, pay2 = emp_str.split('-')
          return clss(first2, last2, pay2)

#statuc method can be user of it doesnt having anything to do with other call just return some static methods
      @staticmethod 
      def is_workday(day):
          if day.weekday() == 5 or day.weekday() == 5:
              return False
          return True 


class Developer(Employee):
    pass

emp_1 =  Developer('Aqhib','Javeed',50000)
emp_2 =  Employee('Test','User',50000)

print(emp_1.email2)

print(emp_2.fullname())

for i in(range(10)):
  print(i)


  
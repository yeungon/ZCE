# Introduction

ZCE standing for Zend Certificate Engineer is a enterprise standard test that evaluates the competence about PHP in a wide range of aspects of the language. There are 11 groups of knowledge that are challenged when taking the test. The material listed in this repository is compiled for that purpose. 

# Practise makes perfect

A number of code snippets, most of them are relatively short, can be found in the folder named "practise". You can fork them if you want to have a look via localhost. You can even find the anwser for each question within the file listed. Normally in each file, there is an echo or print line which output something either string or integer. You have to calculate when looking the code snippet to find the output by yourself if you want to do some practice. 

# Copyright

The content in this repository is under CC BY-NC-ND 

# Update September 2019

We are going to update the question here instead of the "practise" folder

---

###### 1. What's the output?
```php

$a = 'a'; $b = 'b';

echo isset($c) ? $a.$b.$c : ($c = 'c').'d';
```
- A:  abc
- B:  ab
- C:  cd
- D:  ac

<details><summary><b>Answer</b></summary>
<p>

#### Answer: C

As `$c` is not declared then we get `else`, meaning `echo ($c = 'c').'d';`, which returns "cd". This is the first question, so hello world :-)
</p>
</details>





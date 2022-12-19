<div class="button019">
	<a href="{{ route('future.index') }}">ホームに戻る </a>
</div>
<style>
.button019 a {
    background: #eee;
    border-radius: 3px;
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0 auto;
    max-width: 280px;
    padding: 10px 25px;
    color: #313131;
    transition: 0.3s ease-in-out;
    font-weight: 500;
    left:600px;
    text-decoration:none;
}
.button019 a:after {
  content: "";
  position: absolute;
  top: 50%;
  bottom: 0;
  right: 2rem;
  font-size: 90%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: right 0.3s;
  width: 6px;
  height: 6px;
  border-top: solid 2px currentColor;
  border-right: solid 2px currentColor;
  transform: translateY(-50%) rotate(45deg);
}
.button019 a:hover {
  background: #6bb6ff;
  color: #FFF;
}
.button019 a:hover:after {
  right: 1.4rem;
}

</style>
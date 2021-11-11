def loop(n):

    size = n
    matrix = []
    d1 = 0
    d2 = 0
    for i in range(size):
        a = []
        for j in range(size):
            a.append(int(input(f"Input row [{i}] and column [{j}] : ")))
            if i == j:
                d1 += a[i]
            if (i == n - j - 1):
                d2 += a[j]
        matrix.append(a)



    print("\n N = ", n, "\n")

    print("Matrix Result:")
    for i in range(size):
        for j in range(size):
            print(matrix[i][j], end=" ")
        print()
    print("\n")
    print("Diagonal Difference Result = ", abs(d1 - d2))

n = int(input("Please Input the size of matrix: "))
loop(n)
